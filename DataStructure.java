package datastructure;

import java.util.Scanner;

public class DataStructure {
    
        static int[] congkak;
        static int userHome, enemyHome, seedPool;
        static boolean userTurn = true;

    public static void main(String[] args) {
        
        Scanner sc = new Scanner(System.in);
        
        System.out.print("What Level? Right now, only 1 - 3: ");
        initializeLevel(sc.nextInt());
        showCongkak();
        
        
        
    }
    
    public static void initializeLevel(int level){
        
        switch(level){
            
            case 1:
                //congkak total holes: 12
                congkak = new int[12];
                userHome = 10;
                enemyHome = 11;
                seedPool = 5;
                fillCongkak();
                System.out.println("The Board has been initialized.");
                break;
            
            case 2:
            case 3:
                //congkak total holes: 16
                congkak = new int[16];
                userHome = 14;
                enemyHome = 15;
                seedPool = 7;
                fillCongkak();
                System.out.println("The Board has been initialized.");
                break;
                
            default: System.out.println("Not a Valid Input");
        }
    }
    
    public static void fillCongkak(){
        for(int i =0; i<congkak.length; i++){
            if(i!=userHome && i!=enemyHome){
                congkak[i] = seedPool;
            }
        }
    }
    
    public static void showCongkak(){
        for(int i = 0; i<congkak.length-2; i++){
            if(i==seedPool){
                System.out.println("    USER HOME: " + congkak[userHome]);
            }
            System.out.print("("+i+") "+congkak[i] + "    ");
        }
        System.out.println("ENEMY HOME: " + congkak[enemyHome]);
    }
    
    public static void sowSeeds(int index){
        
        //Sow seed time
        
    }
    
    
    
}
