import java.util.Scanner;

public class Problem_02_Generate3LetterWords {
	public static void main(String[] args) {
		Scanner scan = new Scanner(System.in);
		
		String word = scan.nextLine();
		
		for (int i = 0; i < word.length(); i++) {
			for (int j = 0; j < word.length(); j++) {
				for (int t = 0; t < word.length(); t++) {
					String finalWord = "" + word.charAt(i) + word.charAt(j) + word.charAt(t);
					System.out.print(finalWord + " ");
				}
			}
		}
	}
}
