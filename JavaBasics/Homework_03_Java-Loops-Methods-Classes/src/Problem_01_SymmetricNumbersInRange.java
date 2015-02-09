import java.util.Scanner;


public class Problem_01_SymmetricNumbersInRange {
	public static void main(String[] args) {
		Scanner scan = new Scanner(System.in);
		
		int a = scan.nextInt();
		int b = scan.nextInt();
		
		if (a >= 0 && b <= 999) {
			for (int i = a; i <= b; i++) {
				if (i < 10) {
					System.out.print(i + " ");
				}
				else if (i > 10 && i < 100) {
					if (i % 10 == i / 10) {
						System.out.print(i + " ");
					}
				}
				else if (i > 100) {
					if (i % 10 == i / 100) {
						System.out.print(i + " ");
					}
				}
			}
		} else {
			System.out.println("Error");
		}
	}
}
