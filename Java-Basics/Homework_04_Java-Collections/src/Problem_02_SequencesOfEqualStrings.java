import java.util.Scanner;

public class Problem_02_SequencesOfEqualStrings {
	public static void main(String[] args) {
		Scanner scan = new Scanner(System.in);
		String[] words = scan.nextLine().split(" ");

		for(int i = 0;i < words.length - 1;i++){
			if(words[i].equals(words[i+1])){
				System.out.print(words[i] + " ");
			}else{
				System.out.println(words[i]);
			}
		}
		if(words[words.length-2].equals(words[words.length-1])){
			System.out.print(words[words.length-1]);
		}else{
			System.out.println(words[words.length-1]);
		}
	}
}
