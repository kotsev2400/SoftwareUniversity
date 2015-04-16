using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _09.ExchangeVariables
{
    class ExchangeVariables
    {
        static void Main(string[] args)
        {
            int a = 5;
            int b = 10;

            a = a ^ b;
            b = b ^ a;
            a = a ^ b;
            Console.WriteLine("a = " + a);
            Console.WriteLine("b = " + b);
        }
    }
}
