package com.cyc.dao;

import org.springframework.stereotype.Repository;

@Repository
public interface BlogDao {

    int selectBlogCount();

//    private JdbcTemplate jdbcTemplate;
//
//    private final static String INSERT_BLOG_SQL =
//            " INSERT INTO blog(userid, content) " +
//                    "VALUES(?,?)";
//
//    private final static String SELECT_BLOG_COUNT_SQL =
//            " SELECT blogid FROM blog";
//
//    public void insertBlog(Blog blog) {
//        Object[] args = {blog.getUserId(), blog.getContent()};
//        jdbcTemplate.update(INSERT_BLOG_SQL, args);
//    }
//
//    public int selectBlogCount() {
//        Object[] args = {};
//        return jdbcTemplate.queryForList(SELECT_BLOG_COUNT_SQL).size();
//    }
}
