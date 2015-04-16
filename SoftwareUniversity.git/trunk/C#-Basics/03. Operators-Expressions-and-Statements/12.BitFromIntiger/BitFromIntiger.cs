using System;

namespace _12.BitFromIntiger
{
    class BitFromIntiger
    {
        static void Main()
        {
            Console.Write("Enter a number: ");
            int number = int.Parse(Console.ReadLine());
            Console.Write("Enter bit index: ");
            int bitIndex = int.Parse(Console.ReadLine());

            int testBit = number >> bitIndex;
            int bit = testBit & 1;

            Console.WriteLine(new string('-', 50));
            Console.WriteLine("The number is: {0}.", number);
            Console.WriteLine("The binery representation is: {0}.", Convert.ToString(number, 2).PadLeft(16, '0'));
            Console.WriteLine("The bit index is: {0}.", bitIndex);
            Console.WriteLine("The bit at index {0} is {1}.", bitIndex, bit);
            Console.WriteLine(new string('-', 50));
        }
    }
}
