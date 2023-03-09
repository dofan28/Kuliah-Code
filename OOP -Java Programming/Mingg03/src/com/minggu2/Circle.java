package com.minggu2;


public class Circle {

    private final double PI = 3.14159;
    private double radius;
    public static int nomor;

    public Circle() {
        radius = 5;
    }

    public Circle(double r) {
        radius = r;
    }

    public void setRadius(double r) {
        radius = r;
    }

    public double getRadius() {
        return radius;
    }

    public double getArea() {
        return PI * radius * radius;
    }

    public double getDiameter() {
        return radius * 2;
    }

    public double getCircumference() {
        return 2 * PI * radius;
    }
    public String toString(){
        return "Circle radius : " +  radius;
    }

}