﻿using System;
    class NumbersFromOneToN
    {
        static void Main()
        {
            Console.Write("Enter a number: ");
            int number = int.Parse(Console.ReadLine());
            for (int i = 1; i <= number; i++)
			{
			    Console.Write("{0} ", i);
			}
            Console.WriteLine();
        }
    }
