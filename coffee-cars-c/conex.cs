using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;


namespace coffee_cars_c
{
    class conex
    {
        protected String connectionString = "datasource=83.47.104.187;port=3306;username=admin;password=admin;database=coffee_cars";

        public String GetConnection()
        {
            return connectionString;
        }
    }
}
