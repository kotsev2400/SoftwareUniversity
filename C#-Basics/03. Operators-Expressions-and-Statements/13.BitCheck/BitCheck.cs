using System;

namespace _13.BitCheck
{
    class BitCheck
    {
        static void Main()
        {
            Console.Write("Enter a number: ");
            int number = int.Parse(Console.ReadLine());
            Console.Write("Enter bit index: ");
            int bitIndex = int.Parse(Console.ReadLine());

            int testBit = number >> bitIndex;
            int bit = testBit & 1;

            bool isBitOne = bit == 1;

            Console.WriteLine(new string('-', 50));
            Console.WriteLine("The number is: {0}.", number);
            Console.WriteLine("The bit index is: {0}.", bitIndex);
            Console.WriteLine("The bainery representation is: {0}.", Convert.ToString(number, 2).PadLeft(16,'0'));
            Console.WriteLine("Is {0} bit 1 ?     {1}!", bitIndex, isBitOne);
            Console.WriteLine(new string('-', 50));
        }
    }
}
