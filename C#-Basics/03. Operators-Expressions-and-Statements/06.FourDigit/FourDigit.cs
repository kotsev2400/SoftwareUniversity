using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _06.FourDigit
{
    class FourDigit
    {
        static void Main(string[] args)
        {
            Console.Write("Enter four-digit number: ");
            string line = Console.ReadLine();
            int number = int.Parse(line);

            int fourthDigit = number % 10;
            int thirdDigit = (number / 10) % 10;
            int secondDigit = (number / 100) % 10;
            int firstDigit = (number / 1000) % 10;

            Console.WriteLine("The sum of all digit is: {0}", firstDigit+secondDigit+thirdDigit+fourthDigit);
            Console.WriteLine("The number in reversed order: {0}{1}{2}{3}", fourthDigit, thirdDigit, secondDigit, firstDigit);
            Console.WriteLine("The last digit in first position: {0}{1}{2}{3}", fourthDigit,firstDigit,secondDigit,thirdDigit);
            Console.WriteLine("Exchanges the second and third digits: {0}{1}{2}{3}", firstDigit, thirdDigit, secondDigit, fourthDigit);
        }
    }
}
