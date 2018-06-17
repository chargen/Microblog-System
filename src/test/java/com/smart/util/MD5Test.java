package com.smart.util;


import org.junit.Assert;
import org.junit.Test;

public class MD5Test {

    @Test
    public void testGetMD5Str() {
        System.out.println(MD5.getMD5("abc"));
    }

    @Test
    public void testCheckMD5() {
        String s = "123lajfdaljfdsa";
        String md5 = MD5.getMD5(s);
        Assert.assertTrue(MD5.checkMD5(s, md5));
    }
}