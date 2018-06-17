package com.smart.service.impl;

import com.smart.BaseTest;
import com.smart.service.BlogService;
import org.junit.Test;
import org.springframework.beans.factory.annotation.Autowired;

import static org.junit.Assert.*;

public class BlogServiceImplTest extends BaseTest {

    @Autowired
    private BlogService blogService;

    @Test
    public void getBlogCount() {
        System.out.println(blogService.getBlogCount());
    }
}