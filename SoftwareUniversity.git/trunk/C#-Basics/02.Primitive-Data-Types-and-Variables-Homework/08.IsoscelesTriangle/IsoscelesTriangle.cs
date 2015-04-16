using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _08.IsoscelesTriangle
{
    class IsoscelesTriangle
    {
        static void Main(string[] args)
        {
            char copyRight = '\u00a9';
            string emptySpace = " ";

            Console.WriteLine(emptySpace + emptySpace + emptySpace + copyRight);
            Console.WriteLine(emptySpace + emptySpace + copyRight + emptySpace + copyRight);
            Console.WriteLine(emptySpace + copyRight + emptySpace + emptySpace + emptySpace + copyRight);
            Console.WriteLine(copyRight + emptySpace + copyRight + emptySpace + copyRight + emptySpace + copyRight);
        }
    }
}
