import java.util.Scanner;


public class Problem_05_DecimalToHexadecimal {
	public static void main(String[] args) {
		Scanner input = new Scanner(System.in);
		int number = input.nextInt();
		String hex = Integer.toHexString(number).toUpperCase();
		System.out.println(hex);
	}
}
