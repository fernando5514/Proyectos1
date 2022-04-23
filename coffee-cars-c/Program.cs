using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using MySql.Data.MySqlClient;

namespace coffee_cars_c
{
    internal class Program
    {
        static void Main(string[] args)
        {
            string connectionString = "datasource=83.47.104.187;port=3306;username=admin;password=admin;database=coffee_cars";

            string query = @"
                SELECT * FROM `coffee_cars`.usuarios;
            
            ";


            MySqlConnection connection = new MySqlConnection(connectionString);
            MySqlCommand command = new MySqlCommand(query, connection);
            MySqlDataReader reader;

            try
            {
                connection.Open();

                reader = command.ExecuteReader();
                if (reader.HasRows)
                {
 
                    while(reader.Read())
                    {
                        if (reader.GetString(0) == "1")
                        {
                            Console.WriteLine("hola");
                        }
                    }

                }
                else
                {
                    Console.WriteLine("Error al leer");
                }
                connection.Close();
            }
            catch (Exception ex)
            {
                Console.WriteLine(ex.Message);
            }

            int menu = 0;
            do
            {
                Console.WriteLine("\nIntroduzca la opción deseada:\n1.Registrarse\n2.Logearse\n3.Salir de la aplicación");
                try
                {
                    menu = Convert.ToInt32(Console.ReadLine());
                }
                catch(Exception ex)
                {
                    Console.WriteLine(ex.Message);
                }
                if (menu == 1)
                {
                    string usuario;
                    int aux = 0;
                    
                    do
                    {
                        Console.WriteLine("Introduzca su nombre de usuario");
                        usuario = Convert.ToString(Console.ReadLine());
                        //accedemos a la base de datos
                        aux=comprobarlog(query,connection,command,usuario);
                        if (aux == 1)
                        {
                            Console.WriteLine("Usuario ya registrado");
                        }
                    } while (aux != 0);
                   

                }

            } while (menu != 3);
        }


        public static int comprobarlog(string query, MySqlConnection connection, MySqlCommand command,string usuario)
        {
            //damos al query de búsqueda en la base de datos y la abrimos para hacer la búsqueda
            query = @"SELECT usuario FROM `coffee_cars`.usuarios;";
            command = new MySqlCommand(query, connection);
            MySqlDataReader reader;
            connection.Open();
            reader = command.ExecuteReader();
            if (reader.HasRows)
            {
                while (reader.Read())
                {
                    if (reader.GetString(0) == usuario)
                    {
                        connection.Close();
                        return 1;
                    }
                }
            }
            connection.Close();
            return 0;
        }
    }
}
