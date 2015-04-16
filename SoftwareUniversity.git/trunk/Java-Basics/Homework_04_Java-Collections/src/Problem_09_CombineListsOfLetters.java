import java.util.ArrayList;
import java.util.Scanner;


public class Problem_09_CombineListsOfLetters {
	public static void main(String[] args) {
		
		Scanner scan = new Scanner(System.in);
		
		char[] firstLine = scan.nextLine().replace(" ", "").toCharArray();
		char[] secondLine = scan.nextLine().replace(" ", "").toCharArray();
		
		ArrayList<Character> firstList = new ArrayList<>();
		ArrayList<Character> secondList = new ArrayList<>();
		
		for(Character letter:firstLine){
			firstList.add(letter);
			secondList.add(letter);
		}
		
		for(Character letter:secondLine){
			if(!secondList.contains(letter)){
				firstList.add(letter);
			}
		}
		for(Character letter:firstList){
			System.out.print(letter + " ");
		}
	}
}
