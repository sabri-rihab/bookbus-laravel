# BookBus – Project Documentation

## Project Name
**BookBus**

## Project Description
BookBus is an online bus ticket reservation system.  
It allows users to search for available coaches between cities, select seats, and complete payments in a simple and secure way.

The system connects users with different travel agencies that operate coaches on different routes and schedules.

---

## Main Goal
BookBus helps travelers find and reserve bus tickets quickly by:
- Choosing cities and travel date  
- Viewing available coaches  
- Selecting seats  
- Making a secure payment  

---

## User Journey

### 1. Search for a Trip
The user starts by filling a search form:
- Departure city  
- Arrival city  
- Travel date  
- Number of passengers  

When the user clicks **Search**, the system looks for all available coaches that match these criteria.

---

### 2. Display Available Coaches
After searching, a list of available coaches is displayed.

Each coach shows:
- Agency name  
- Departure time  
- Arrival time  
- Optional description  
- Available seats  
- Ticket price per seat  

The user can compare the options and choose the coach that fits their needs.

---

### 3. Start Reservation
When the user selects a coach, a reservation process begins.

The user is redirected to the **Reservation Page**, where:
- A reservation is temporarily created  
- The user can select seat numbers  
- Selected seats become **reserved** (blocked for others)  
- The total price is calculated automatically  

---

### 4. Reservation Timer
Once the reservation starts, a **10-minute timer** begins.

- If the user confirms and pays within 10 minutes, the reservation is completed  
- If time runs out, the reservation is cancelled  
- Reserved seats become available again  

The user can cancel the reservation before payment, but **not after payment is made**.

---

### 5. Payment
The user chooses a payment method:
- Credit/Debit Card  
- Bank Application  

After successful payment:
- The reservation becomes **confirmed**  
- Seats change from **reserved** to **taken**  
- Available seats for that coach are updated  

---

### 6. Final Confirmation
The user receives confirmation of the booking.  
The trip is now fully booked and cannot be cancelled from the system.

---

## Agencies and Coaches
Each agency can have:
- Multiple coaches  
- Different routes (cities)  
- Different schedules  
- Different prices  

This allows users to choose between various options for the same trip.

---

## System Rules
- Seats cannot be double booked  
- Reserved seats are locked during the 10-minute timer  
- Only paid reservations become final  
- Cancelled or expired reservations release the seats  

---

## Conclusion
BookBus provides a simple and reliable way to book bus tickets online.  
It ensures fair seat availability, clear pricing, and a smooth reservation experience for both users and travel agencies.
