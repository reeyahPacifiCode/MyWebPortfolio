#include <iostream>
using namespace std;

int main () {
	string product,lastname,firstname,phonenumber,region,province,city,baranggay,postalcode,sellername,prodname,proddesc;
	string product2="Super ",product3="Hyper ",product4="Max ";
	int Select, todo, Buyer, Seller, Exit, order, price;
	int prod1=5,prod2=10,prod3=15,prod4=20;
	do {
	cout <<"\n\t\t\t\t======Welcome To Online Shopping=======";
	cout <<"\n\t\t\t\t||             1.Buyer               ||";
	cout <<"\n\t\t\t\t||             2.Seller              ||";
	cout <<"\n\t\t\t\t||             3.Exit                ||";
	cout <<"\n\t\t\t\t======================================="<<endl;
	cout <<"\n\tSelect Number: ";
	cin >> Select;
      switch (Select) {
       case 1:
	  	cout <<"\n\tYOU SELECTED: Buyer " <<endl;
        cout <<"\n\t\t\t\t=========Welcome to Online Shopping=========";
        cout <<"\n\t\t\t\t||                                        ||";
        cout <<"\n\t\t\t\t||     1. Order       2. Check Parcel     ||";
        cout <<"\n\t\t\t\t||                                        ||";
	    cout <<"\n\t\t\t\t============================================" <<endl;
	    cout <<"\n\tSelect Number: ";
	    cin >> todo;
	    if (todo == 1){
	    	cout <<"\n\tEnter Product Name: " ;
	    	cin >> product;
	    	cout <<"\n\t\t\t\t******************CHOOSE PRODUCT******************\n" <<endl;
	    	cout <<"\n\t\t\t 1. " <<product <<" \t\t\t\t.......... $" <<prod1 <<endl;
	    	cout <<"\n\t\t\t 2. " <<product2 <<product <<" \t\t\t.......... $" <<prod2 <<endl;
	    	cout <<"\n\t\t\t 3. " <<product3 <<product <<" \t\t\t.......... $" <<prod3 <<endl;
	    	cout <<"\n\t\t\t 4. " <<product4 <<product <<" \t\t\t\t.......... $" <<prod4 <<endl;
	    	cout <<"\n\tInput Number: ";
	    	cin >> order;
	    	if (order == 1){
	    		cout << "\n\tYou chose " << product << " and it costs $" <<prod1 <<endl;
			} else if (order == 2){
	    		cout << "\n\tYou chose " <<product2 << product << " and it costs $" <<prod2 <<endl;
			} else if (order == 3){
	    		cout << "\n\tYou chose " <<product3 << product << " and it costs $" <<prod3 <<endl;
			} else if (order == 4){
	    		cout << "\n\tYou chose " <<product4 << product << " and it costs $" <<prod4 <<endl;
	    	}
	    	cout <<"\n\n\t\t\t\t****************FILL-UP INFORMATION***************\n"<<endl;
	    	cout <<"\n\tFirst name: ";
	    	cin >> firstname;
			cout <<"\n\tLast name: ";
		    cin >> lastname;
	    	cout <<"\n\tPhone number: ";
		    cin >> phonenumber;
	    	cout <<"\n\tBaranggay: ";
			cin.ignore();
			getline (cin, baranggay); 	    
	    	cout <<"\n\tCity: ";
	    	cin >> city;
	    	cout <<"\n\tProvince: ";
	    	cin >>province;	    
	    	cout <<"\n\tRegion: ";
	    	cin >>region;
	    	cout <<"\n\tPostal code: ";
	    	cin >> postalcode;	
	    	cout <<"\t\t\t\t==================================="<<endl;
	    	cout <<"\t\t\t\t||                               ||"<<endl;
	    	cout <<"\t\t\t\t||    Online Shopping Receipt    ||"<<endl;
	    	cout <<"\t\t\t\t||                               ||"<<endl;
	    	cout <<"\t\t\t\t==================================="<<endl;
	    	cout <<"\n\tFull Name: " <<firstname <<" " <<lastname <<endl <<"\n\tPhone Number: "<<phonenumber <<endl <<"\n\tFull Address: "<<baranggay <<" " <<city <<", " <<province <<", " <<region <<", " <<postalcode<<endl;
			if (order == 1){
				cout <<"\n\tTotal Purchase: $" <<prod1;
			} else if (order == 2){
				cout <<"\n\tTotal Purchase: $" <<prod2;
			} else if (order == 3){
				cout <<"\n\tTotal Purchase: $" <<prod3;
			} else if (order == 4){
				cout <<"\n\tTotal Purchase: $" <<prod4;
			}
	    } else if (todo == 2) {
	    cout <<"\n\t ***     TRACKING NUMBER: 78451986752      ***\n"<<endl;
	    cout <<"\n\t||  Sender is Preparing to ship your parcel  ||\n"<<endl;
	    cout <<"\n\t||    Parcel has been picked up by courier   ||\n"<<endl;
	    cout <<"\n\t||     Parcel has departed from station      ||\n"<<endl;
	    cout <<"\n\t||       Parcel has arrived at station       ||\n"<<endl;
	    cout <<"\n\t||         Parcel is out for delivery        ||\n"<<endl;
	    cout <<"\n\t||       **PARCEL HAS BEEN DELIVERED**       ||\n"<<endl;
		}
      	break;
	    case 2:
	  	cout <<"\n\tYOU SELECTED: Seller " <<endl;
        cout <<"\n\t\t\t\t====================================";
        cout <<"\n\t\t\t\t||                                ||";
        cout <<"\n\t\t\t\t||   Welcome to Online Shopping   ||";
        cout <<"\n\t\t\t\t||                                ||";
	    cout <<"\n\t\t\t\t====================================\n" <<endl;
	    cout <<"\n\tSeller/Shop Name: ";
		cin.ignore();
		getline (cin, sellername);
		cout <<"\tProduct Name: ";
		getline (cin, prodname);
		cout <<"\tProduct Description: ";
		getline (cin, proddesc);
		cout <<"\tPrice: $";
		cin >> price;
	    cout <<"\n\t\t\t\t==================================="<<endl;
	    cout <<"\t\t\t\t||                               ||"<<endl;
	    cout <<"\t\t\t\t||       **Seller Receipt**      ||"<<endl;
	    cout <<"\t\t\t\t||                               ||"<<endl;
	    cout <<"\t\t\t\t==================================="<<endl;
	    cout <<"\n\t\tSeller/Shop Name: " <<sellername <<endl <<"\n\t\tProduct Name: " <<prodname <<endl <<"\n\t\tProduct Description: " <<proddesc <<endl <<"\n\t\tPrice: $" <<price <<endl;
	    cout <<"\n\t\t\t==========THE PRODUCT IS NOW AVAILABLE ONLINE!==========\n\n" <<endl;
	    cout <<"\n\n\t\t\t===========THANK YOU FOR SHOPPING WITH US!===========\n\n" <<endl;
	    break;
	    case 3:
	    cout <<"\n\t\t\t\t******************EXIT*******************";
	   	cout <<"\n\t\t\t\t***************THANK YOU*****************";
	   	break;
   	 } 	
} while (Select !=3);
   return 0;
}
