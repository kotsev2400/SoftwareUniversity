using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _05.ThirdDigit
{
    class ThirdDigit
    {
        static void Main(string[] args)
        {
            Console.Write("Enter a number to see if 3th digit is 7: ");
            string line = Console.ReadLine();
            long number = long.Parse(line);
            long result = (number / 100) % 10;

            if (result == 7)
            {
                Console.WriteLine("True. The number is 7.");
            }
            else
            {
                Console.WriteLine("False. The number isn't 7.");
            }
        }
    }
}
