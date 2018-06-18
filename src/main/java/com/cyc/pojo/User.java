package com.cyc.pojo;

import java.io.Serializable;

public class User implements Serializable {
    private int userID;
    private int head;
    private String name;
    private String md5password;

    public User() {
    }

    public User(int userID, int head, String name, String md5password) {
        this.userID = userID;
        this.head = head;
        this.name = name;
        this.md5password = md5password;
    }

    public int getUserID() {
        return userID;
    }

    public int getHead() {
        return head;
    }

    public String getName() {
        return name;
    }

    public String getMd5password() {
        return md5password;
    }

    public void setUserID(int userID) {
        this.userID = userID;
    }

    public void setHead(int head) {
        this.head = head;
    }

    public void setName(String name) {
        this.name = name;
    }

    public void setMd5password(String md5password) {
        this.md5password = md5password;
    }
}
