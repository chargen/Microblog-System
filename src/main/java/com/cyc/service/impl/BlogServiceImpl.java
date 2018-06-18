package com.cyc.service.impl;

import com.cyc.dao.BlogDao;
import com.cyc.service.BlogService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
//@ComponentScan(basePackages=("com.cyc.dao.BlogDao"))
public class BlogServiceImpl implements BlogService {

    @Autowired
    private BlogDao blogDao;

    @Override
    public int getBlogCount() {
        return blogDao.selectBlogCount();
    }
}
