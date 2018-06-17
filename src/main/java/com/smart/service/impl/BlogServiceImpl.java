package com.smart.service.impl;

import com.smart.dao.BlogDao;
import com.smart.service.BlogService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
public class BlogServiceImpl implements BlogService {

    @Autowired
    private BlogDao blogDao;

    @Override
    public int getBlogCount() {
        return blogDao.selectBlogCount();
    }
}
