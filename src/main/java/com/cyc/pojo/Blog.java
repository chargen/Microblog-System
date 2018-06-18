package com.cyc.pojo;

public class Blog {
    private int blogId;
    private int userId;
    private String content;

    public Blog() {
    }

    public Blog(int blogId, int userId, String content) {
        this.blogId = blogId;
        this.userId = userId;
        this.content = content;
    }

    public int getBlogId() {
        return blogId;
    }

    public int getUserId() {
        return userId;
    }

    public String getContent() {
        return content;
    }

    public void setBlogId(int blogId) {
        this.blogId = blogId;
    }

    public void setUserId(int userId) {
        this.userId = userId;
    }

    public void setContent(String content) {
        this.content = content;
    }
}
