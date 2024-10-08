import java.util.LinkedList;
import java.util.Queue;

public class QueueLinkListExample {
    public static void main(String[] args) {
        toh();

        // Queue<String> queue = new LinkedList<String>();

        // // Add elements to the queue
        // queue.add("Element 1");
        // queue.add("Element 2");
        // queue.add("Element 3");

        // System.out.println("Initial Queue: " + queue);

        // // Remove elements from the queue
        // String removedElement = queue.remove();
        // System.out.println("Removed Element: " + removedElement);

        // System.out.println("Queue after removal: " + queue);
    }

    public static void toh(){
        int n = 3; // Number of disks
        moveDisks(n, 'A', 'C', 'B');  // A, B and C are names of rods
    }


    public static void moveDisks(int n, char fromRod, char toRod, char auxRod) {
        if (n == 1) {
            System.out.println("Move disk 1 from rod " + fromRod + " to rod " + toRod);
            return;
        }
        moveDisks(n - 1, fromRod, auxRod, toRod);
        System.out.println("Move disk " + n + " from rod " + fromRod + " to rod " + toRod);
        moveDisks(n - 1, auxRod, toRod, fromRod);
    }

}