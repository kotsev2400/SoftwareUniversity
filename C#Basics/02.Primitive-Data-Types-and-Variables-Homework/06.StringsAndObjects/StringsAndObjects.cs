using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _06.StringsAndObjects
{
    class StringsAndObjects
    {
        static void Main(string[] args)
        {
            string hello = "Hello";
            string world = "World";
            object sayHelloWorld = hello + " " + world;
            string say = (string)sayHelloWorld;
            Console.WriteLine(say);
        }
    }
}
