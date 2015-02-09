using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _10.EmployeeData
{
    class EmployeeData
    {
        static void Main(string[] args)
        {
            string firstName = "Ivan";
            string lastName = "Petkov";
            byte age = 28;
            string gender = "male";
            int personalID = 830611257;
            long employeeNumber = 275600008306112507;

            Console.WriteLine("First Name: " + firstName);
            Console.WriteLine("Last Name: " + lastName);
            Console.WriteLine("Employee Age: " + age);
            Console.WriteLine("Employee Gender: " + gender);
            Console.WriteLine("Personal ID: " + personalID);
            Console.WriteLine("Unique Employee Number: " + employeeNumber);
        }
    }
}
