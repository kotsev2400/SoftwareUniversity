using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _11.BankAccount
{
    class BankAccount
    {
        static void Main(string[] args)
        {
            string firstName = "Ivan";
            string middleName = "Draganov";
            string lastName = "Petkov";
            decimal balance = 856.12M;
            string bankName = "UCB";
            long IBAN = 81231315630611257;
            long creditCard_1 = 275600008306112507;
            long creditCard_2 = 148416458314788886;
            long creditCard_3 = 497413785468445555;

            Console.WriteLine("First Name: " + firstName);
            Console.WriteLine("Middle Name: " + middleName);
            Console.WriteLine("Last Name: " + lastName);
            Console.WriteLine("Balance: " + balance);
            Console.WriteLine("Bank Name: " + bankName);
            Console.WriteLine("IBAN: " + IBAN);
            Console.WriteLine("Credit Card Number: " + creditCard_1);
            Console.WriteLine("Credit Card Number: " + creditCard_2);
            Console.WriteLine("Credit Card Number: " + creditCard_3);
        }
    }
}
