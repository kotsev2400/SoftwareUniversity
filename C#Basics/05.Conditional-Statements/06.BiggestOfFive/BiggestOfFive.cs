using System;

namespace _06.BiggestOfFive
{
    class BiggestOfFive
    {
        static void Main()
        {
            Console.WriteLine("Enter five numbers: ");
            decimal a = decimal.Parse(Console.ReadLine());
            decimal b = decimal.Parse(Console.ReadLine());
            decimal c = decimal.Parse(Console.ReadLine());
            decimal d = decimal.Parse(Console.ReadLine());
            decimal e = decimal.Parse(Console.ReadLine());

            Console.WriteLine(new string ('*', 20));
            if ((a >= b) && (a >= c) && (a >= d) && (a >= e))
            {
                Console.WriteLine(a);   
            }
            else if ((b >= a) && (b >= c) && (b >= d) && (b >= e))
            {
                Console.WriteLine(b);
            }
            else if ((c >= a) && (c >= b) && (c >= d) && (c >= e))
            {
                Console.WriteLine(c);
            }
            else if ((d >= a) && (d >= c) && (d >= c) && (d >= e))
            {
                Console.WriteLine(d);
            }
            else
            {
                Console.WriteLine(e);
            }
        }
    }
}
