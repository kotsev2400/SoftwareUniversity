using System;

namespace _14.ModifyBit
{
    class ModifyBit
    {
        static void Main()
        {
            Console.Write("Enter a number: ");
            int number = int.Parse(Console.ReadLine());
            Console.Write("Enter a bit value (0 or 1): ");
            int bitValue = int.Parse(Console.ReadLine());
            Console.Write("Enter bit index: ");
            int bitIndex = int.Parse(Console.ReadLine());

            Console.WriteLine(new string('*', 50));
            Console.WriteLine("The given number is: {0}.", number);
            Console.WriteLine("The bainery representation is: {0}", Convert.ToString(number, 2).PadLeft(16, '0'));
            Console.WriteLine("The bit intex is: {0}.", bitIndex);
            Console.WriteLine("The bit value is: {0}.", bitValue);
            Console.WriteLine(new string('-', 50));

            if (bitValue == 1)
            {
                int testBitOne = 1 << bitIndex;
                int bit = number | testBitOne;
                Console.WriteLine("Bainery result is: {0}.", Convert.ToString(bit, 2).PadLeft(16, '0'));
                Console.WriteLine("Number result is: {0}.", Convert.ToString(bit, 10));
            }
            else
            {
                int testBitZero = ~(1 << bitIndex);
                int bit = number & testBitZero;
                Console.WriteLine("Bainery result is: {0}.", Convert.ToString(bit, 2).PadLeft(16, '0'));
                Console.WriteLine("Number result is: {0}.", Convert.ToString(bit, 10));
            }

            Console.WriteLine(new string('*', 50));
        }
    }
}
