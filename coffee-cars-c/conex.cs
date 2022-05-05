using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;


namespace coffee_cars_c
{
    class conex
    {
        protected String connectionString = "datasource=79.146.192.82;port=3306;username=admin;password=admin;database=coffee_cars";

        public String GetConnection()
        {
            return connectionString;
        }
    }
}
