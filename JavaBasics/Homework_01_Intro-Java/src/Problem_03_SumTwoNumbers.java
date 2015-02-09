import java.util.Scanner;


public class Problem_03_SumTwoNumbers {

	public static void main(String[] args) {

		System.out.println("Enter two integers: ");
		
		int a = new Scanner(System.in).nextInt();
		int b = new Scanner(System.in).nextInt();
		int sum = a + b;
		
		System.out.println("The sum is: " + sum);
		
	}
}
