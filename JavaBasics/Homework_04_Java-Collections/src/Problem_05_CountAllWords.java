import java.util.Scanner;


public class Problem_05_CountAllWords {
	public static void main(String[] args) {
		Scanner scan = new Scanner(System.in);
		String text = scan.nextLine();
		
		String[] words = text.split("\\W+");
		System.out.println(words.length);
	}
}
