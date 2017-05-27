package datastructure;

import java.util.Scanner;

public class DataStructure {
    
        static int[] congkak;
        static int userHome = 0, enemyHome = 0, seedPool;
        static boolean userTurn = true;
        

    public static void main(String[] args) {
        
        Scanner sc = new Scanner(System.in);
        
        System.out.print("What Level? Right now, only 1 - 3: ");
        initializeLevel(sc.nextInt());
        System.out.println();
        showCongkak();
        
        
    }
    
    public static void initializeLevel(int level){
        
        switch(level){
            
            case 1:
                //congkak total holes: 12
                congkak = new int[10];
                seedPool = 5;
                fillCongkak();
                System.out.println("The Board has been initialized.");
                break;
            
            case 2:
            case 3:
                //congkak total holes: 16
                congkak = new int[14];
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
        System.out.print("USER HOME: " + userHome + "     ");
        for(int i = 0; i<congkak.length; i++){
            if(i==seedPool){
                System.out.print("\nENEMY HOME: " + enemyHome + "    ");
            }
            System.out.print("("+i+") "+congkak[i] + "    ");
        }
        
    }
    
    public static void sowSeeds(int index){
        /*
        User Homes: 0 - 6
        Enemy Homes: 7 - 13
        
        If loop index to 13>x, go back to 0
        If UserTurn TRUE -> Last Loop Empty in 0-6, take +7's seeds -> userHome
                         -> Last Loop Empty in 7-13, skip turn??? don't know; checking PDF
        
        */
        
        int toSow = congkak[index];
        
        while(true){
            
        }
        
    }
    
    public static void checkVictory(){
        //if userHome/enemyHome is empty, the other wins
    }
    
    
    
}
