using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _08.PrimeNumberCheck
{
    class PrimeNumberCheck
    {
        static void Main(string[] args)
        {
            Console.Write("Enter a positive number from 1 to 100, to check if it's prime: ");
            int number = int.Parse(Console.ReadLine());



            if ((number % 2 == 0) && (number != 2))
            {
                Console.WriteLine("The number {0} is't prime.", number);
            }
            else
            {
                Console.WriteLine("The number {0} is prime.", number);
            }
        }
    }
}
