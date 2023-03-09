package com.minggu2;

import java.awt.Point;


public class Circle2D {
    private final double PI = 3.14159;
    private double radius;
    private Point point;

    public Circle2D() {
        radius = 3.0;
        point = new Point(0,0);
    }

    public Circle2D(double r,Point p) {
        radius = r;
        point = p;
    }
    public Circle2D(double r) {
        radius = r;
        point = new Point(0,0);
    }

    public void setPoint(Point p){
        point = p;
    }

    public Point getPoint(){
        return point;
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
        return  "Radius : "+ radius +  " " + "Point : " + point;
    }

    public boolean lingkaranBersinggungan(Circle2D c2){
        
        double squareA = Math.pow((c2.point.x - point.x),2);

        double squareB = Math.pow((c2.point.y - point.y),2);

        double Result =  Math.sqrt(squareA + squareB);

        if(Result <= (c2.radius + radius)){
            System.out.println("Bersinggungan");
            return true;
        }else{
            System.out.println("tidak Bersinggungan");
            return false;
        }



    }

}