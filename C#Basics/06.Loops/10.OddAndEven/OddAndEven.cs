using System;

class OddAndEven
{
    static void Main()
    {
        Console.WriteLine("Enter numbers separate by spaces: ");
        string input = Console.ReadLine();
        string[] numbers = input.Split(new char[] { ' ' }, StringSplitOptions.RemoveEmptyEntries);

        int evenSum = 1;
        int oddSum = 1;

        for (int i = 0; i < numbers.Length ; i++)
        {
            int number = int.Parse(numbers[i]);
            if (i % 2 == 0)
            {
                evenSum *= number;
            }
            else
            {
                oddSum *= number;
            }
        }
        if (oddSum == evenSum)
        {
            Console.WriteLine("Yes: " + oddSum);
        }
        else
        {
            Console.WriteLine("No. odd:{0} | even:{1}", oddSum, evenSum);
        }
    }
}
