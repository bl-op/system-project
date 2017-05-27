package datastructure;

import java.util.Scanner;

public class DataStructure {
    
        static int[] congkak;
        static int userHome = 0, enemyHome, seedPool;
        static boolean userTurn = true;
        

    public static void main(String[] args) {
        
        Scanner sc = new Scanner(System.in);
        
        //System.out.print("What Level? Right now, only 1 - 3: ");
        initializeLevel(1);
        System.out.println();
        showCongkak();

        
        
        
        
    }
    
    public static void initializeLevel(int level){
        
        switch(level){
            
            case 1:
                //congkak total holes: 12
                congkak = new int[12];
                enemyHome = 5;
                seedPool = 5;
                fillCongkak();
                break;
            
            case 2:
            case 3:
                //congkak total holes: 16
                congkak = new int[16];
                seedPool = 7;
                enemyHome = 7;
                fillCongkak();
                break;
                
            default: System.out.println("Not a Valid Input");
        }
    }
    
    public static void fillCongkak(){
        //fill holes except the players' homes
        for(int i =0; i<congkak.length; i++){
            if(!(i==userHome) && !(i==enemyHome)){
                congkak[i] = seedPool;
            } else congkak[i] = 0;
        }
    }
    
    public static void showCongkak(){
        //Don't bother reading this code. Just to show the board.
        System.out.print("USER HOME: " + congkak[userHome] + "     ");
        for(int i = 1; i<seedPool; i++){
            System.out.print("("+i+") "+congkak[i] + "    ");
        }
        System.out.print("\n\t\t");
        for(int i = seedPool*2-1; i>seedPool; i--){
            System.out.print("("+i+") "+congkak[i] + "    ");
        }
        System.out.println("ENEMY HOME: " + congkak[enemyHome]);
    }
    
    public static void sowValid(int index){
        
        //verifies if players chooses their respective holes, if true, sow them
        
        if(userTurn){
            if((0<index) && (index<seedPool)){
                sow(index);
                System.out.println("User turn approved.");
            } else {
                System.out.println("Invalid Hole: " + index);
            }
            
        } else if(!userTurn){
            if((seedPool<index) && (index<seedPool*2)){
                System.out.println("Enemy Turn approved");
                sow(index);
            } else {
            System.out.println("Invalid Hole: " + index);
            }
        }
    }
    
    public static void sow(int index){
        
        int toSow = congkak[index];
        congkak[index] = 0;
        
        while(toSow>0){
           
            --index;
            
            if(index<0){
                index = seedPool*2-1;
            }
            
            if(userTurn){
                if(!(index==enemyHome)){
                    congkak[index]++;
                } else {
                    index--;
                    congkak[index] ++;
                }
                
            } else {
                
                if(!(index==userHome)){
                    congkak[index]++;
                } else {
                    index = seedPool*2-1;
                    congkak[index] ++;
                }
            }
            
            toSow--;
            
            /*
            code:
            
            if next hole not empty, continue
            
            if next hole empty, next next hole is yours
            
            if both two holes empty, your turn ends
            */
        }
        
    }
    
    public static void checkVictory(){
        //check if own holes no seeds, the other one wins...?
    }
    
    
    
}
