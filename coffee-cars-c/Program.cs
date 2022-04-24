using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using MySql.Data.MySqlClient;
using System.Security.Cryptography;

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
                    string usuario,usuario2, contraseña, contraseña2, nombre, apellidos;
                    int aux = 0;
                    
                    do
                    {
                        Console.WriteLine("Introduzca su email");
                        usuario = Convert.ToString(Console.ReadLine());
                        //accedemos a la base de datos
                        aux=Comprobarlog(query,connection,command,usuario);
                        if (aux == 1)
                        {
                            Console.WriteLine("Usuario ya registrado");
                        }
                    } while (aux != 0);
                    Console.WriteLine("Vuelva a introducir su email");
                    usuario2 = Convert.ToString(Console.ReadLine());

                    //limpiamos el buffer de entrada
                    while (Console.KeyAvailable)
                        Console.ReadKey(false); // skips previous input chars

                    if (usuario == usuario2)
                    {
                        do
                        {
                            Console.WriteLine("Introduzca su contraseña:");
                            contraseña = Convert.ToString(Console.ReadLine());
                            Console.WriteLine("Vuelva a introducir su contraseña:");
                            contraseña2 = Convert.ToString(Console.ReadLine());
                        } while (contraseña != contraseña2);
                        Console.WriteLine("Introduzca su Nombre de pila:");
                        nombre = Convert.ToString(Console.ReadLine());
                        Console.WriteLine("Introduzca sus apellidos:");
                        apellidos = Convert.ToString(Console.ReadLine());

                        aux = 0;

                        aux = Registro(query, connection, command, usuario, contraseña, nombre, apellidos);
                        if (aux == 1)
                        {
                            Console.WriteLine("Usuario registrado con éxito!!!!");
                        }
                        else
                        {
                            Console.WriteLine("No se ha registrado correctamente");
                        }
                    }
                    else
                    {
                        Console.WriteLine("ERROR -----> Los usuarios no coinciden");
                    }
                }
                if (menu == 2)
                {
                    string palabra;
                    palabra = RandomString();
                    Console.WriteLine(palabra);
                }

            } while (menu != 3);
        }


        public static int Comprobarlog(string query, MySqlConnection connection, MySqlCommand command,string usuario)
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
        public static int Registro(string query, MySqlConnection connection, MySqlCommand command, string usuario,string contraseña,string nombre, string apellidos)
        {
            string clave= RandomString();
            //damos al query de búsqueda en la base de datos y la abrimos para hacer la búsqueda
            query = @"INSERT INTO `coffee_cars`.`usuarios` (`usuario`, `contrasena`, `nombre`, `apellidos`, `claveuser`) VALUES('"+usuario+"', '"+contraseña+"', '"+nombre+"', '"+apellidos+"', '"+clave+"');";
            command = new MySqlCommand(query, connection);
            MySqlDataReader reader;
            connection.Open();
            reader = command.ExecuteReader();
            while (reader.Read())
            {
            }
            connection.Close();
            return 1;
        }

        public static string RandomString()
        {
            const string src = "abcdefghijklmnopqrstuvwxyz0123456789";
            int length = 16;
            var sb = new StringBuilder();
            Random RNG = new Random();
            for (var i = 0; i < length; i++)
            {
                var c = src[RNG.Next(0, src.Length)];
                sb.Append(c);
            }
            return sb.ToString();
        }
    }

}
