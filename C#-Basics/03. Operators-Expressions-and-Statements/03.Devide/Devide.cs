using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _03.Devide
{
    class Devide
    {
        static void Main(string[] args)
        {
            Console.Write("Enter a number to see if it can be divided by 5 and 7: ");
            int number = int.Parse(Console.ReadLine());

            if ((number % 5 == 0) && (number % 7 == 0))
            {
                Console.WriteLine("True. The number {0} CAN be divided.", number);
            }
            else
            {
                Console.WriteLine("False. The number {0} CAN'T be divided.", number);
            }
        }
    }
}
