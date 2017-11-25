package workspace;
import javax.swing.JFrame;

public class DiceRollDriver {
	private static void createAndDisplayGUI()
	{
		JFrame frame = new JFrame("Dice Roll!");
		DiceRoll dr = new DiceRoll();
		
		frame.add(dr.getContent());
		frame.pack();
		frame.setVisible(true);
	}
	
	public static void main(String[] args)
	{
		createAndDisplayGUI();
	}
}
