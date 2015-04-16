using System;
using System.Text;

namespace _11.ExtractBit3
{
    class ExtractBit3
    {
        static void Main(string[] args)
        {
            Console.OutputEncoding = Encoding.UTF8;
            Console.Write("Enter a number: ");
            int number = int.Parse(Console.ReadLine());

            int testBit = number >> 3;
            int bit = testBit & 1;

            Console.WriteLine("The number is: {0}.", number);
            Console.WriteLine("The binary representation is: {0}", Convert.ToString(number,2).PadLeft(16,'0'));
            if (bit == 0)
            {
                Console.WriteLine("Third bit is '0'.");
            }
            else
            {
                Console.WriteLine("Third bit is '1'.");
            }

        }
    }
}
