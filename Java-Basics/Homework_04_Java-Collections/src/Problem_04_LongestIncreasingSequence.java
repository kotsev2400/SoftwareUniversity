import java.util.Scanner;

public class Problem_04_LongestIncreasingSequence {
	public static void main(String[] args) {
		Scanner scan = new Scanner(System.in);
		int countN = scan.nextInt();
		scan.nextLine();
		String[] numbers = scan.nextLine().split(" ");		
		int[] numInt = new int[numbers.length];
		
		for(int i = 0;i < countN;i++){
			numInt[i] = Integer.parseInt(numbers[i]);
		}
		
		for(int i = 0;i < numInt.length - 1;i++){
			for(int y = i + 1;y < numInt.length;y++){
				if(numInt[i] > numInt[y]){
					int x = numInt[i];
					numInt[i] = numInt[y];
					numInt[y] = x;
				}
			}
		}
		
		for(int number:numInt){
			System.out.print(number + " ");
		}
	}
}
