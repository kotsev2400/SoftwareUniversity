import java.util.Scanner;


public class Problem_06_FormattingNumbers {
	public static void main(String[] args) {
		Scanner input = new Scanner(System.in);
		
		int a = input.nextInt();
		float b = input.nextFloat();
		float c = input.nextFloat();
		
		int bin = Integer.parseInt(Integer.toBinaryString(a));
		
		System.out.print("|");
		System.out.printf("%-10s", Integer.toHexString(a).toUpperCase());
		System.out.print("|");
		System.out.printf("%010d", bin);
		System.out.print("|");
		System.out.printf("%10.2f", b);
		System.out.print("|");
		System.out.printf("%-10.3f", c);
		System.out.println("|");
	}
}
