using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _12.NullValues
{
    class NullValues
    {
        static void Main(string[] args)
        {
            int? intNull = null;
            double? doubleNull = null;
            Console.WriteLine("Null value: " + intNull);
            Console.WriteLine("Null value: " + doubleNull);

            intNull += 7;
            doubleNull += 4.5;
            Console.WriteLine("Number + null value: " + intNull);
            Console.WriteLine("Number + null value: " + doubleNull);
        }
    }
}
