# 🗄️ Schema Sanremissimo

## 1. editions
year: Integer
host: String
co_hosts: String
location: String
logo_url: String

## 2. songs
edition_id: FK
title: String
youtube_url: String
collaborators: String
position: Integer
lyrics: LongText

## 3. artists
name: String
type: String
bio: Text
img_url: String

## 4. awards
name: String

# Tabelle Pivot

## artist_song
artist_id: FK ➔ artists
song_id: FK ➔ songs

## award_song
award_id: FK ➔ awards
song_id: FK ➔ songs

# Relazioni

Edition ➔ Songs: one to many
Song ➔ Edition: many to one
Song ➔ Artists: many to many
Song ➔ Awards: many to many