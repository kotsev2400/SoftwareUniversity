import java.util.ArrayList;
import java.util.Random;
import java.util.Scanner;


public class Problem_06_RandomHandsOf5Cards {
	public static void main(String[] args) {
		Scanner scan = new Scanner(System.in);
		
		int hands = scan.nextInt();
		
		String cards[] = { "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K", "A" };
		String suits[] = { "♠", "♦", "♥", "♣" };
		
		Random randomGenerator = new Random();
		int num = 0;
		
		for (int i = 0; i < hands; i++) {
			for (int j = 0; j < 5; j++) {
				num = randomGenerator.nextInt((12 - 0) + 1) + 0;
                System.out.print(cards[num]);
                num = randomGenerator.nextInt((3 - 0) + 1) + 0;
                System.out.print(suits[num] + " ");    
			}
			System.out.println();
		}
	}
}
