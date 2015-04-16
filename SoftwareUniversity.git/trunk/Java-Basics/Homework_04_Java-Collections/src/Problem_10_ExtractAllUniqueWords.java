import java.util.Scanner;
import java.util.Set;
import java.util.TreeSet;


public class Problem_10_ExtractAllUniqueWords {
	public static void main(String[] args) {
		
		Scanner scan = new Scanner(System.in);
		String line = scan.nextLine().toLowerCase();
		
		String[] words = line.split("\\W+");
		
		Set<String> wordsList = new TreeSet<String>(); 
		
		for (String word : words) {
			wordsList.add(word);
		}
		
		for (String word : wordsList) {
			System.out.print(word + " ");
		}
	}
}
