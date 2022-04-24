using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using MySql.Data.MySqlClient;
using System.Security.Cryptography;
using System.IO;

namespace coffee_cars_c
{
    class Program
    {
        static void Main(string[] args)
        {
            conex conex = new conex();//creo objeto conex para acceder a la conexión a la base de datos
            string connectionString = conex.GetConnection();
            string query = @"
                SELECT * FROM `coffee_cars`.usuarios;
            
            ";


            MySqlConnection connection = new MySqlConnection(connectionString);
            MySqlCommand command = new MySqlCommand(query, connection);

            int menu = 0;
            Console.WriteLine("\t\t BIENVENIDO A COFFEE CARS");
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
                        Console.WriteLine("Introduzca su nombre de usuario");
                        usuario = Convert.ToString(Console.ReadLine());
                        //accedemos a la base de datos
                        aux=Comprobarlog(query,connection,command,usuario);
                        if (aux == 1)
                        {
                            Console.WriteLine("Usuario ya registrado");
                        }
                    } while (aux != 0);
                    Console.WriteLine("Vuelva a introducir su nombre de usuario");
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
                        contraseña = seguridad.Encrypt(usuario,contraseña,256);
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
                    int aux = 0;
                    string usuario, contraseña,clave;
                    Console.WriteLine("Introduzca su nombre de usuario");
                    usuario = Convert.ToString(Console.ReadLine());
                    //accedemos a la base de datos
                    aux = Comprobarlog(query, connection, command, usuario);
                    if (aux == 0)
                    {
                        Console.WriteLine("El usuario no exixte");
                    }
                    else
                    {
                        Console.WriteLine("Introduzca su contraseña:");
                        contraseña = Convert.ToString(Console.ReadLine());
                        contraseña = seguridad.Encrypt(usuario, contraseña, 256);
                        aux=ComprobarContraseña(query, connection, command, usuario,contraseña);
                        if (aux == 1)
                        {
                            clave = Exito(query, connection, command, usuario, contraseña);
                            Console.WriteLine("\n\t\tCOFFEE CARS");
                            Console.WriteLine("\n\tBienvenido "+usuario+" !!!");
                            Console.WriteLine("\n\tSu clave es: "+clave);
                            Console.WriteLine("\n\tTiene acceso a http://coffee-cars.duckdns.org/template_html_startup/login.php ");
                        }
                        else
                        {
                            Console.WriteLine("ERROR ----> Contraseña incorrecta");
                        }
                    }


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

        public static int ComprobarContraseña(string query, MySqlConnection connection, MySqlCommand command, string usuario,string contraseña)
        {
            //damos al query de búsqueda en la base de datos y la abrimos para hacer la búsqueda
            query = @"SELECT usuario,contrasena FROM `coffee_cars`.usuarios;";
            command = new MySqlCommand(query, connection);
            MySqlDataReader reader;
            connection.Open();
            reader = command.ExecuteReader();
            if (reader.HasRows)
            {
                while (reader.Read())
                {
                    if (reader.GetString(0) == usuario&&reader.GetString(1)==contraseña)
                    {
                        connection.Close();
                        return 1;
                    }
                }
            }
            connection.Close();
            return 0;
        }
        public static string Exito(string query, MySqlConnection connection, MySqlCommand command, string usuario, string contraseña)
        {
            string clave="";
            //damos al query de búsqueda en la base de datos y la abrimos para hacer la búsqueda
            query = @"SELECT usuario,contrasena,claveuser FROM `coffee_cars`.usuarios;";
            command = new MySqlCommand(query, connection);
            MySqlDataReader reader;
            connection.Open();
            reader = command.ExecuteReader();
            if (reader.HasRows)
            {
                while (reader.Read())
                {
                    if (reader.GetString(0) == usuario && reader.GetString(1) == contraseña)
                    {
                        clave=Convert.ToString(reader.GetString(2));
                        connection.Close();
                        return clave;
                    }
                }
            }
            connection.Close();
            return clave;
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
            int length = 10;
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
