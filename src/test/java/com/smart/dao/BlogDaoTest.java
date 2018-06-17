package com.smart.dao;

import com.smart.BaseTest;
import org.junit.Test;
import org.springframework.beans.factory.annotation.Autowired;

import static org.junit.Assert.*;

public class BlogDaoTest extends BaseTest {

    @Autowired
    private BlogDao blogDao;

    @Test
    public void selectBlogCount() {
        System.out.println(blogDao.selectBlogCount());
    }
}