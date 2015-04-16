using System;

namespace _09.AgeAfter10
{
    class AgeAfter10
    {
        static void Main()
        {
            Console.Write("Enter your birthday date in format dd.mm.yyyy:  ");
            DateTime myBirthday = DateTime.Parse(Console.ReadLine());

            DateTime dateNow = DateTime.Now;

            var myAge = dateNow.Year - myBirthday.Year;
            Console.WriteLine("You are {0} years old.", myAge);

            var futureAge = myAge + 10;
            Console.WriteLine("After 10 years you will be {0} years old.", futureAge);
        }
    }
}
