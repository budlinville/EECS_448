import javax.swing.JFrame;

public class MultiButtonDemoDriver 
{
	private static void createAndDisplayGUI()
	{
		JFrame frame = new JFrame("Multi-button Demo!");
		MultiButtonDemo demo = new MultiButtonDemo();
		
		frame.add(demo.getContent());
		frame.pack();
		frame.setVisible(true);
	}
	
	public static void main(String[] args)
	{
		createAndDisplayGUI();
	}
}