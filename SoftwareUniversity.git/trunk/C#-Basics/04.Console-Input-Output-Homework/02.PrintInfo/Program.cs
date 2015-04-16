using System;

namespace _02.PrintInfo
{
    class Program
    {
        static void Main()
        {
            Console.WriteLine("Please, enter your company information: ");
            Console.Write("Company name: ");
            string companyName = Console.ReadLine();
            Console.Write("Copmany address: ");
            string companyAddress = Console.ReadLine();
            Console.Write("Phone Number: ");
            string phoneNumber = Console.ReadLine();
            Console.Write("Fax number: ");
            string faxNumber = Console.ReadLine();
            Console.Write("Web site: ");
            string webSite = Console.ReadLine();
            Console.Write("Menager first name: ");
            string firstName = Console.ReadLine();
            Console.Write("Menager last name: ");
            string lastName = Console.ReadLine();
            Console.Write("Menager age: ");
            int managerAge = int.Parse(Console.ReadLine());
            Console.Write("Manager phone: ");
            string managerPhone = Console.ReadLine();

            Console.WriteLine(new string('*', 50));
            Console.WriteLine("Company name: {0}", companyName);
            Console.WriteLine("Company address: {0}", companyAddress);
            Console.WriteLine("Phone number: {0}", phoneNumber);
            Console.WriteLine("Fax number: {0}", faxNumber);
            Console.WriteLine("Web site: {0}", webSite);
            Console.WriteLine("Manager first name: {0}", firstName);
            Console.WriteLine("Manager last name: {0}", lastName);
            Console.WriteLine("Manager age: {0}", managerAge);
            Console.WriteLine("Manager phone number: {0}", managerPhone);
            Console.WriteLine(new string('*', 50));
        }
    }
}
