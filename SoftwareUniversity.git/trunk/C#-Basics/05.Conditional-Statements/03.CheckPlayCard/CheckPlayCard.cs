using System;

namespace _03.CheckPlayCard
{
    class CheckPlayCard
    {
        static void Main()
        {
            Console.Write("Enter play card simbol: ");
            string simbol = Console.ReadLine();
            switch (simbol)
            {
                case "2":
                case "3":
                case "4":
                case "5":
                case "6":
                case "7":
                case "8":
                case "9":
                case "10":
                case "J":
                case "Q":
                case "K":
                case "A":
                    Console.WriteLine("Yes");
                    break;
                default: Console.WriteLine("No");
                    break;
            }
        }
    }
}
